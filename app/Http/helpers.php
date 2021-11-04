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
                return 'نام و نام خانوادگی';
            }
        }
    }

    function getAccessLevel($user): string
    {
        if(!empty($user)) {
            if($user->isAdmin()) {
                return 'مدیر شرکت';
            } elseif($user->isStaffUser()) {
                return 'کارمند شرکت';
            } elseif($user->isManagerUser()) {
                return 'مدیر رستوران';
            } else {
                return 'کاربر';
            }
        } else {
            return 'سمت';
        }
    }

    function getGender($user): string
    {
        if(!empty($user)) {
            if($user->isMan()) {
                return 'مرد';
            } elseif($user->isFemale()) {
                return 'زن';
            } else {
                return 'تعیین نشده';
            }
        } else {
            return 'جنسیت';
        }
    }

    function getStatus($user): string
    {
        if(!empty($user->status)) {
            if($user->status === 'S') {
                return 'تعلیق';
            } elseif($user->status === 'B') {
                return 'مسدود';
            } else {
                return 'فعال';
            }
        } else {
            return 'وضعیت حساب';
        }
    }


    function convertNumbers(string $srting , $toPersian = true)
    {
        $english = ['0' , '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9'];
        $persian = ['٠' , '١' , '٢' , '٣' , '٤' , '٥' , '٦' , '٧' , '٨' , '٩'];
        $persian2 = ['۰' , '۱' , '۲' , '۳' , '۴' , '۵' , '۶' , '۷' , '۸' , '۹'];
        $persianDecimal = ['&#1776;' , '&#1777;' , '&#1778;' , '&#1779;' , '&#1780;' , '&#1781;' , '&#1782;' , '&#1783;' , '&#1784;' , '&#1785;'];
        $arabic = ['٩' , '٨' , '٧' , '٦' , '٥' , '٤' , '٣' , '٢' , '١' , '٠'];
        if(!$toPersian) {
            $srting = str_replace($persian , $english , $srting);
            $srting = str_replace($persian2 , $english , $srting);
            $srting = str_replace($persianDecimal , $english , $srting);
            $srting = str_replace($arabic , $english , $srting);
            return $srting;
        } else {
            return str_replace($english , $persian , $srting);
        }
    }

}
