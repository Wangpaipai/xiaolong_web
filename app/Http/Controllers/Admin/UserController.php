<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * 登录页面
     * Created by:Lxj
     * Created at:2021/8/21 0:50
     * @return Application|Factory|View|RedirectResponse|Redirector
     */
    public function index() {
        if (Auth::check()) {
            return redirect('/admin/home');
        }

        return view('admin.login.login');
    }

    /**
     * 登录
     * Created by:Lxj
     * Created at:2021/8/20 22:21
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        try {
            $registeredUserController = new RegisteredUserController();
            $registeredUserController->store($request);
        } catch (ValidationException $e) {
            return responsError($e->getMessage());
        }
        return responsSuccess([], "新用户注册成功");
    }

    /**
     * 登录
     * Created by:Lxj
     * Created at:2021/8/20 22:25
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $authenticatedSessionController = new AuthenticatedSessionController();
            $authenticatedSessionController->store($request);
        } catch (\Exception $e) {
            return responsError($e->getMessage());
        }
        return responsSuccess([], '登录成功');
    }

    /**
     * Created by:Lxj
     * Created at:2021/8/21 17:40
     * @param Request $request
     * @return RedirectResponse
     */
    public function logOut(Request $request): RedirectResponse
    {
        $authenticatedSessionController = new AuthenticatedSessionController();
        return $authenticatedSessionController->destroy($request);
    }

    public function userList() {
        $user = new User();
        $list = $user->getUserList();
//        dump($list);
        return view('admin.users.index', ['data' => $list]);
    }

    public function userDelete(Request $request) {
        $id = $request->get('id');

        if (User::where('id', '=', $id)->delete()) {
            return responsSuccess([], "删除成功");
        } else {
            return responsError("删除失败");
        }
    }

    public function userDetail(Request $request) {
        $id = $request->get('id');
        $user = User::find($id);
        return view('admin.users.edit', ['data' => $user]);
    }

    public function userEdit(Request $request) {
        $data = $request->all();
        unset($data['repassword']);
        if ($data['password'] != '') {
            $data['password'] = Hash::make($data['password']);
        }
        User::where('id', '=', $request['id'])->update($data);
        return responsSuccess([], "更新成功");
    }

    public function userCreate() {
        return view('admin.users.create');
    }
}
