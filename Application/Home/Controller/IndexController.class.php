<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {

    protected  $connection = 'DB_CONFIG1';

    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function test($user){
        echo 'User:'.$user;
    }

    public function model(){
        //创建Model积累 传递user表 think_user
//        $user = new Model('User');

        //第二个参数 数据库表前缀
//        $user = new Model('User', 'think_');

        //第三个参数 单独配置数据库信息
//        $user = new Model('User', 'think_', $this->connection );

        //不用命名空间(执行Model)
//        $user =  M('User', 'think_', $this->connection);

        //调用UserModel类
//        $user = new UserModel();

        //调用D生成model(执行UserModel 先找 Home 下的 再找Common下的)
//        $user = D('User');

        //跨模块实例化

//        $user = D('Admin/User');


//        var_dump($user->query("SELECT * FROM think_user WHERE user='樱桃小丸子'"));

//        var_dump($user->getDbFields());

        $user = M('User');
//        var_dump($user->where('id = 1 and user = "樱桃小丸子"')->select());

//        $condition['id'] = 1;
//        $condition['user'] = '黑崎一护';
//        $condition['_logic'] = 'OR';

//        $condition = new \stdClass();
//        $condition->id = 1;
//        $condition->user = '黑崎一护';
//        $condition->_logic = 'OR';

        //表达式查询
        //等于
//        $map['id'] = array('eq', 1);
//
//        //不等于
//        $map['id'] = array('neq', 1);
//
//        //大于
//        $map['id'] = array('gt', 1);
//
//        //大于等于
//        $map['id'] = array('egt', 1);
//
//        //小于
//        $map['id'] = array('lt', 1);
//
//        //小于等于
//        $map['id'] = array('elt', 1);
//
//        //模糊查询
//        $map['id'] = array('like', '%小%');
//
//        $map['id'] = array('notlike', '%小%');
//
//        $map['id'] = array('like', array('%小%', '%蜡%'), 'AND');
//
//        $map['id'] = array('between', '1,2');
//        $map['id'] = array('not between', '1,2');
//        $map['id'] = array('in', '1, 2');
//
//        $map['id'] = array('not in', '1');
//
//        //自定义
//        $map['id'] = array('exp', '=1');
//
//
//        //不同条件查询
//        $map['id|user'] = array(1, '樱桃小丸子', '_multi' => ture);
//        $map['id&user'] = array(1, '樱桃小丸子', '_multi' => ture);
//        $map['id|user'] = array(array('gt', 1), '樱桃小丸子', '_multi' => true);

        //区间查询
//        $map['id'] = array(array('egt', 1), array('elt', 2), 'OR');

        //组合查询
//        $map['id']  = array('eq', 1);
//        $map['_string'] = 'user="樱桃小丸子" AND email="326023094@qq.com"';
//        $map['_logic'] = 'OR';
//        $map['_query'] = 'user=樱桃小丸子&email=326023094@qq.com';

        //符合查询_complex
//        $where['id'] = 1;
//        $where['user'] = '黑崎一护';
//        $where['_logic'] = 'OR';
//        $map['_complex'] = $where;
//        $map['email'] = '326023094@qq.com';
//        $map['_logic'] = 'OR';

//        var_dump($user->where($map)->select());


        //统计查询
//        var_dump($user->count()); echo'<br>';
//        var_dump($user->count('email')); echo'<br>';
//        var_dump($user->max('id')); echo'<br>';
//        var_dump($user->min('id')); echo'<br>';
//        var_dump($user->avg('id')); echo'<br>';
//        var_dump($user->sum('id')); echo'<br>';
        //动态查询
//        var_dump($user->getByUser('樱桃小丸子'));
//
//        var_dump($user->getFieldByUser('樱桃小丸子', 'id'));


        //sql语句执行
//        var_dump($user->query("SELECT * FROM think_user"));
//        var_dump($user->execute('UPDATE think_user SET user="樱桃" WHERE id=1'));
//        var_dump($user->query("SELECT * FROM think_user WHERE id=1"));

        //连贯操作
//        var_dump($user->where('id > 0')->order('date DESC')->limit(1,1)->select());
//        var_dump($user->select(array('where'=>array('id'=> array('gt', 1)), 'order' => 'date DESC', 'limit'=> '0, 1')));
//        $map['user'] = 'zhanglei1';
//        $map['_logic'] = 'OR';
//        var_dump($user->where('id = 1')->where($map)->select());
        //排序
//        var_dump($user->order('id DESC')->select());
//        var_dump($user->order(array('id' => 'DESC'))->select());
//        var_dump($user->order('id DESC ,date DESC')->select());
//        var_dump($user->order(array('id' => 'DESC', 'date' => 'DESC'))->select());
//

        //返回制定的字段
//        var_dump($user->field('id, user')->select());
//        var_dump($user->field(array('id', 'user'))->select());
//        var_dump($user->field('SUM(id) AS count, user')->select());
//        var_dump($user->field(array('id', 'LEFT(user, 3) AS left_user'))->select());
//        var_dump($user->field('*')->select());

        //分页
//        var_dump($user->limit(0,3)->select());
//        var_dump($user->page(3,2)->select());

        //切换表
//        var_dump($user->table('think_info')->select());
//        var_dump($user->table('__USER__')->select());
//        var_dump($user->table('__INFO_')->select());

        //双表查询
//        var_dump($user->field('a.id, b.id, a.user, b.user')-> table('__USER__ a, __INFO__ b')->select());
//        var_dump($user->field('a.id, b.id, a.user, b.user')-> table(array('think_user'=>'a', 'think_info'=>'b'))->select());

        //给表区别名
//        var_dump($user->alias('a')->select());

        //分组查询

//        var_dump($user->field('email, SUM(id)')->group('email')->having('email > 1')->select());

        //sql注释
//        var_dump($user->comment('查找所有用户的所有数据')->select());

        //join RIGHT LEFT FULL
//        var_dump($user->join('think_info on think_user.id = think_info.id', 'RIGHT')->select());

        //union 两个结果集
        var_dump($user->union('SELECT `id`, user FROM `think_info`')->field('id, user')->select());
    }


}