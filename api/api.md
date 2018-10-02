##登陆接口

type: post

url: /api/doLogin.php

data: username
      userPwd

返回响应体  
     
        ok  或  fail


##检查用户是否已登陆

type: get

url : /api/whetherLogin.php

返回

      "已登陆" 或 "没登陆"



## 获得用户信息的接口
url:/api/getUserInfo.php
type:get
data:不需要
响应体：
        JSON
        { "id":1, "slug":"admin","nickname":"管理员"..... }


## 获取网站信息的接口
url:api/getWebInfo.php
type:get
data:不需要
响应体：
        JSON
       { postsCount: 10,  draftedCount:2 , categoryCount:12, commentsCount: 3 , heldCount:4 }


## 获取所有评论数据的接口
url:api/getComments.php
type:get
data：
        pageIndex：页码，也就是说查第几页
        pageSize: 页容量,一页显示多少条
响应体：
        JSON
{
     data:[
        {"id":1,"author":"小周","content":"评论内容","title":"文章标题","created":"时间","status":"状态"},
        {},
        {}
      ],

    totalPage: 53
}


## 修改评论状态的接口
url:/api/updateComments.php
type:post
data:
        id: 根据id来修改
                可以传一个id     6
                也可以传多个id，多个id之间用,隔开  例：  6,11,19
        status：要修改成什么状态
响应体：
        普通字符串就可以
        ok fail



## 获取文章的接口文档
url:"/api/getPosts.php",
type:get
data:
        pageIndex: 代表查第几页
        pageSize:页容量
        category_id： 根据分类来筛选，如果是空字符串代表所有分类
        status：  根据状态来筛选， 如果是空字符串代表所有状态

响应体：
        {

                data:[]
                totalPage:64
        }


## 获取所有分类的接口
url:/api/getCategory.php
type:get
data:无
响应体：
        JSON
        [
                {"id":3,"slug":"live","name":"会生活"},
        ]


##筛选分类

url: "/api/classify.php"

data: classify

      status
dataType: json
响应体:  
  
      [{},{},{}]    



##修改用户密码

url: /api/updatePassword.php
dataType: json
data:  
     formerPwd  //原密码
     newPwd     //新密码

响应体 
   string   
   ok 或 fail


