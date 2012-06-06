<?php
/**
 * CUserIdentity class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

/**
 * CUserIdentity is a base class for representing identities that are authenticated based on a email and a password.
 *
 * Derived classes should implement {@link authenticate} with the actual
 * authentication scheme (e.g. checking email and password against a DB table).
 *
 * By default, CUserIdentity assumes the {@link email} is a unique identifier
 * and thus use it as the {@link id ID} of the identity.
 *
 * @property string $id The unique identifier for the identity.
 * @property string $name The display name for the identity.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @version $Id: CUserIdentity.php 3426 2011-10-25 00:01:09Z alexander.makarow $
 * @package system.web.auth
 * @since 1.0
 */
class CUserIdentity extends CBaseUserIdentity
{
	/**
	 * @var string email
	 */
	public $email;
	/**
	 * @var string password
	 */
	public $password;

	/**
	 * Constructor.
	 * @param string $email email
	 * @param string $password password
	 */
	public function __construct($email,$password)
	{
		$this->email=$email;
		$this->password=$password;
	}

	/**
	 * Authenticates a user based on {@link email} and {@link password}.
	 * Derived classes should override this method, or an exception will be thrown.
	 * This method is required by {@link IUserIdentity}.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		throw new CException(Yii::t('yii','{class}::authenticate() must be implemented.',array('{class}'=>get_class($this))));
	}

	/**
	 * Returns the unique identifier for the identity.
	 * The default implementation simply returns {@link email}.
	 * This method is required by {@link IUserIdentity}.
	 * @return string the unique identifier for the identity.
	 */
	public function getId()
	{
		return $this->email;
	}

	/**
	 * Returns the display name for the identity.
	 * The default implementation simply returns {@link email}.
	 * This method is required by {@link IUserIdentity}.
	 * @return string the display name for the identity.
	 */
	public function getName()
	{
		return $this->email;
	}
}
