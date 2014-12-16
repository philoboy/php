<?php
//定义元素接口
abstract class User
{
    public function getPoint()
    {
        return rand();  //该数据应该由数据库中读取，这里就直接模拟某个值了
    }

    //这里的accept方法用于把访问者引入，在这个方法里，($visitor)访问者可以通过User类获取需要的数据进而进行相应的操作
    abstract function accept(UserVisitor $vitor);

}

//定义访问者接口
abstract class UserVisitor
{
    //访问者必须要实现的访问不同用户的接口方法
    abstract function visitVip(User $user);
    abstract function visitNormal(User $user);
}

//实现元素接口
class VipUser extends User
{
    //这里的getPoint()具体实现就由接口中实现了

    //在这里就把当前对象传递给了visitor 访问者， 在访问者类的visitVip方法中就能根据$this获取必要的数据进行相应的操作
    public function accept(UserVisitor $vitor)
    {
        $vitor->visitVip($this);
    }
}

class NormalUser extends User
{
    //同上的getPoint()具体实现就由接口中实现了

   //同VipUser类中的accept
    public function accept(UserVisitor $vitor)
    {
        $vitor->visitNormal($this);
    }
}


//积分操作的访问者实现
class PointActVisitor extends UserVisitor
{
    public function visitVip(User $user)
    {
        echo "Vip用户+10分\n";
    }

    public function visitNormal(User $user)
    {
        echo "Normal用户+5分\n";
    }
}

//用户的树形结构
class Users
{
    protected $users;
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    //让所有的用户都能被访问者访问
    public function handleVisitor(UserVisitor  $visitor)
    {
        foreach($this->users as $user)
        {
            $user->accept($visitor);
        }
    }
}

$pointVisitor = new PointActVisitor();

$users = new Users();
$users->addUser(new VipUser());  //添加新用户
$users->addUser(new NormalUser());
$users->addUser(new NormalUser());

$users->handleVisitor($pointVisitor); //执行PointActVisitor访问者的操作
