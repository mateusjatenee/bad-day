<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Socialite;

class OAuthController extends Controller
{
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/facebook');
        }

        $authUser = $this->findOrCreateUser($user);
        $auth = Auth::loginUsingId($authUser->id);

        return Redirect::to('/');

    }

    private function findOrCreateUser($user)
    {
        if ($authUser = User::where('provider_id', $user->getId())->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'provider' => 'facebook',
            'provider_id' => $user->getId(),
            'avatar' => $user->getAvatar(),

        ]);
    }

}
