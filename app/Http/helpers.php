<?php
if(!function_exists('isActive')) {
    function isActive($key , $activeClassName = 'active' , $disableClassName = ''): string
    {
        if(is_array($key)) {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : $disableClassName;
        }
        return Route::currentRouteName() == $key ? $activeClassName : $disableClassName;
    }

    function getFullName($user): string
    {
        if(!empty($user->name) && !empty($user->lastname)) {
            return $user->name . ' ' . $user->lastname;
        } else {
            if(!empty($user->username)) {
                return $user->username;
            } elseif(!empty($user->lastname)) {
                return $user->lastname;
            } elseif(!empty($user->name)) {
                return $user->name;
            } else {
                return 'Name lastname';
            }
        }
    }

    function getAccessLevel($user): string
    {
        if($user->accessLevel === 'MC') {
            return 'مدیر شرکت';
        } elseif($user->accessLevel === 'MR') {
            return 'مدیر رستوران';
        } elseif($user->accessLevel === 'SC') {
            return 'کارمند شرکت';
        } elseif($user->accessLevel === 'SR') {
            return 'کارمند رستوران';
        } else {
            return 'کاربر';
        }
    }
}