<?php
namespace api\Controller\dbController
 
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\DBAL\Connection;
 
class dbController
{
    private $conn;
 
    public function __construct(Connection $conn)
    {
        //$this->conn = $conn;
        $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array (
            'driver'    => 'pdo_mysql',
            'host'      => 'mysql.senextimemanagement.com',
            'dbname'    => 'senex_core',
            'user'      => 'senex_user',
            'password'  => 'QuantumLeap#16',
        ),
));
    }
 
    public function loadUserByUsername($username)
    {
        $stmt = $this->conn->executeQuery('SELECT * FROM users WHERE username = ?', array(strtolower($username)));
        if (!$user = $stmt->fetch()) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }
 
        return new User($user['username'], $user['password'], explode(',', $user['roles']), true, true, true, true);
    }
 
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }
 
        return $this->loadUserByUsername($user->getUsername());
    }
 
    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
}
?>
