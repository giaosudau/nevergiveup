<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
//class UserIdentity extends CUserIdentity {

/**
 * Authenticates a user.
 * The example implementation makes sure if the username and password
 * are both 'demo'.
 * In practical applications, this should be changed to authenticate
 * against some persistent user identity storage (e.g. database).
 * @return boolean whether authentication succeeds.
 */
//    private $_id;
//
//    public function authenticate() {
//
//        $record = Register::model()->findByAttributes(array('username' => $this->username));
//
//        if ($record === null)
//            $this->errorCode = self::ERROR_USERNAME_INVALID;
//
//        else if ($record->password !== md5($this->password))
//            $this->errorCode = self::ERROR_PASSWORD_INVALID;
//        else {
//            $this->_id = $record->user_id;
//            $this->setState('title', $record->title);
//            $this->errorCode = self::ERROR_NONE;
//        }
//        return !$this->errorCode;
//    }
//
//}

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
      // */
    private $_id;

    public function authenticate() {
        $user = Register::model()->findByAttributes(array(
            'username' => $this->username
                ));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!md5($user->password) === $this->password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->user_id;
            $this->setState('title', 'Success');
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}