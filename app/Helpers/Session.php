<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Session
{

    /**
     * Return all sessions in the database
     *
     * @return object
     */
    public static function getAll() {
        $sessions = DB::table('sessions')->get();
        return $sessions;
    }
     /**
      * Return all sessions of the logged in user
      *
      * @return object
      */
    public static function getCurrentUser() {
        return Session::getById(Auth::id());
    }

    /**
     * Return all sessions of a specified user
     *
     * @param mixed $user
     * @return object
     */
    public static function getByUser($user) {
        if ( is_object($user) ) {
            return Session::getById($user->id);
        }
        $user = User::findOrFail($user);
        return Session::getById($user->id);
    }

    /**
     * Get sessions by user id
     *
     * @param int $id
     * @return object
     */
    private static function getById($id) {
        return DB::table('sessions')->where('user_id', $id)->get();
    }

    /*
    |--------------------------------------------------------------------------
    | Remove sessions
    |--------------------------------------------------------------------------
    |
    | The functions below will provide the application the ability
    | to remove certain sessions if they are compromised. Users are
    | also able to revoke sessions to improve security.
    |
    */

    /**
     * Remove session by id
     *
     * @param string $id
     * @return void
     */
    public static function removeById($id) {
        $sessions = DB::table('sessions')->where('id', $id)->delete();
    }

    /**
     * Remove all sessions for current user
     *
     * @return void
     */
    public static function removeCurrentUser() {
        $sessions = Session::getCurrentUser()->delete();
    }

    /**
     * Remove all sessions
     *
     * @param bool $confirmation
     * @return void
     */
    public static function removeAll(bool $confirmation) {
        if ($confirmation) {
            $sessions = DB::table('sessions')->truncate();
        }
    }

}
