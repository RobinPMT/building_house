<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService(): UserService
    {
        return services()->userService();
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where([
            //'active' => 0,
            'email'  => $request->email
        ])->select('active')->get()->first();
        if (\Auth::attempt($credentials)) {
            if ($user->active == 1) {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            }
            return redirect()->route('home')->with('warning', 'Vui lòng check mail để hoàn tất thủ tục đăng nhập!');
        }
        return redirect('/dang-nhap')->with('danger', 'Kiểm tra lại thông tin đăng nhập');
    }

    public function getLogout()
    {
        \Auth::logout();
        return redirect()->route('home')->with('success', 'Đăng xuất thành công');
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $requestRegister)
    {
        $requestRegister->validated();
        $user = new User();
        $user->name = $requestRegister->name;
        $user->email = $requestRegister->email;
        $user->phone = $requestRegister->phone;
        $user->password = bcrypt($requestRegister->password);
        if ($user->save()) {
            return redirect()->route('get.login.auth')->with('success', 'Đăng kí thành công!');
        }

//        if ($user->id) {
//            $email = $user->email;
//            $code = bcrypt(bin2hex(md5(time().$email)));
//
//            //link gửi trong mail
//            $url = route('get.verifyaccount.register', ['id' => $user->id,'code' =>  $code]);
//            $data =[
//                'route' => $url
//            ];
//            Mail::send('email.verify_account', $data, function ($message) use ($email) {
//                $message->to($email, 'Verify Account')->subject('Xác thực tài khoản');
//            });
//            $user->code_active = $code;
//            $user->time_code_active = Carbon::now('Asia/Ho_Chi_Minh');
//            $user->save();
//            return redirect()->route('get.login')->with('warning', 'Xin vui lòng xác thực tài khoản để hoàn tất thủ tục!!');
//        }
        return redirect()->back()>with('danger', 'Đăng kí thất bại!');
    }

    public function verifyAccount(Request $request)
    {
        $code  = $request->code;
        $id = $request->id;
        $checkUser = User::where([
            'code_active' => $code,
            'id'=> $id
        ])->first();
        if (!$checkUser) {
            return redirect('/')->with('danger', 'Đường dẫn không hợp lệ. Xin vui lòng kiểm tra lại!!');
        }
        $checkUser->active = 0;
        $checkUser->save();
        return redirect()->route('home')->with('success', 'Tài khoản đã được kích hoạt...Xin chúc mừng!!!');
    }

    public function getChangePassword()
    {
        return view('auth.change_password');
    }

    public function postChangePassword(ChangePasswordRequest $changePasswordRequest)
    {
        $changePasswordRequest->validated();
        if (Hash::check($changePasswordRequest->password_old, get_data_user('web', 'password'))) {
            $user = User::find(get_data_user('web'));
            $user->password = bcrypt($changePasswordRequest->password);
            $user->save();
            return redirect()->back()->with('success', 'Đổi mật khẩu thành công!');
        }
        return redirect()->back()->with('danger', 'Mật khẩu cũ không đúng!');
    }

    public function getProfile()
    {
        return view('auth.profile');
    }

    public function postProfile(Request $request)
    {
        $user = auth()->user();
        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar', 'avatars');
            if (isset($file['name'])) {
                $user->avatar = $file['name'];
            }
        }
        $user->name = $request->name ?? null;
        $user->phone = $request->phone ?? null;
        $user->address = $request->address ?? null;
        $user->save();
        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }
}
