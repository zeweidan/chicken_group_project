<template>
  <div class="layout">
    <Layout>
      <Header class="header">
        <Row>
          <Col span="6">
            <div class="lang">
              MIOTO
            </div>
          </Col>
          <Col span="6"><span class="zp">我的作品</span></Col>
          <Col span="6"><span class="lt">论坛讨论</span></Col>
          <Col span="6">
            <Poptip placement="bottom-end" style="float: right; margin-right: 5px">
              <button class="tx"></button>
              <!--<a>click 激活</a>-->
              <div slot="title"><span class="popup">蛋小宝</span></div>
              <div slot="content"><span class="popup">退出登录</span></div>
            </Poptip>
          </Col>
        </Row>
      </Header>
      <Layout>
        <Content :style="{height:'auto', background:'RGBA(255, 254, 252, 1)'}">
          <Row>
            <div class="project-content clearfix">
              <div class="bar clearfix">
                <div class="design clearfix">
                  <span class="design-title">全部设计:</span>
                  <select style="width: 140px;height: 27px;border: 0;outline: none;">
                    <option v-for="item in cityList">{{item.value}}</option>
                  </select>
                </div >
                <div class="sort clearfix">
                  <span class="design-title">排序:</span>
                  <select style="width: 140px;height: 27px;border: 0;outline: none;">
                    <option v-for="item in cityList">{{item.value}}</option>
                  </select>
                  <!--<div class="sort-arrow"></div>-->
                </div>
                  <input class="search" type="text" placeholder="搜索"/>
              </div>

              <div class="content">
                <ul>
                  <li class="new-project" @click="creProject" @mouseover="newOn($event)" @mouseout="newOut($event)"></li>
                  <li v-for="(item,index) in pro_nums">
                    <div class="single-project">
                      <div class="single-bg" @mouseover="over(index)" @mouseout="out(index)" :style="single_bg">
                        <div v-if="index == num" class="zz">
                          <button class="single-btn huabi"></button>
                          <button class="single-btn wancheng"></button>
                          <button class="single-btn shanchu"></button>
                        </div>
                      </div>
                      <div class="single-title">
                        <div><h1 class="biaoti">眼中的太阳<span class="status">未完成</span></h1></div>
                        <p>2018-01-14 14:31</p>
                      </div>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </Row>
        </Content>
        <!--<Sider hide-trigger>Sider</Sider>-->
      </Layout>
      <!--<Footer>Footer</Footer>-->
    </Layout>
    <creProjectMask v-show="showMask" @Child="closeMask"></creProjectMask>
  </div>
</template>
<script>
  import creProjectMask from './newMask'
  export default {
    data () {
      return {
        cityList: [
          {
            value: '全部作品',
            label: '全部作品'
          },
          {
            value: '我的喵',
            label: '我的喵'
          },
          {
            value: '你的喵',
            label: '你的喵'
          }
        ],
        model1: '',
        num: null,
        showMask: false,
        single_bg: {
          backgroundImage: 'url(' + require('../../src/assets/thumb.png') + ')',
          backgroundRepeat: 'no-repeat',
          backgroundSize: '150px 179.4px'
        },
        pro_nums: 7
      }
    },
    methods: {
      over: function (index){
        this.num = index
      },
      out: function (index){
        this.num = null
      },
      newOn: function (e){
        e.target.style.background = "#FDA085"
      },
      newOut: function (e){
        e.target.style.background = ""
      },
      creProject: function (){
        this.showMask = true
      },
      closeMask: function() {
        this.showMask = false
      }
    },
    components: {
      creProjectMask
    }
  }
</script>
<style scoped>
  .clearfix{
    overflow:hidden;
    _zoom:1;
  }
  .layout{
    font-family: PingFangSC-Semibold;
    height: 100%;
  }
  .header {
    height: 48px;
    line-height: 48px;
    background: #FDA085;
    color:#fff;
    font-size: 13px;
    padding: 0;
    box-shadow: 0 0 1px 0 rgba(0,0,0,0.5);
    min-width: 750px;
  }
  .lang {
    font-size: 12px;
    float: right;
  }
  .zp {
    float: right;
    margin-right: 30px;
  }
  .lt {
    float: left;
    margin-left: 30px;
  }
  .tx {
    float: right;
    /*margin-right: 8px;*/
    width: 37px;
    height: 37px;
    background: url('../../src/assets/touxiang.png') no-repeat center;
    background-size: 37px 37px;
    margin-top: 6px;
    border: none;
    outline: none;
  }
  .popup {
    color: rgba(82,82,82,1);
    font-family: PingFangSC-Regular;
    font-size: 12px;
    line-height: 17px;
    height: 17px;
  }
  .project-content {
    width: 746px;
    margin: 0 auto;
  }
  .bar {
    height: 30px;
    width: 710px;
    line-height: 28px;
    font-size: 11px;
    font-style: normal;
    font-family: PingFangSC-Light;
    color: rgba(63,63,63,1);
    margin: 23px auto;
  }
  .design {
    float: left;
    width: 205px;
    margin-right: 38px;
  }
  .design-title {
    display: inline-block;
    float: left;
    margin-right: 3px;
  }
  .sort {
    width: 215px;
    float: left;
  }
  .sort-arrow {
    border: 1px solid rgba(255,255,255,1);
    box-shadow: 0 0 1px 0 rgba(0,0,0,0.5);
    float: right;
    width: 29px;
    height: 28px;
    position: relative;
    right: 2px;
    top: 1px;
  }
  .search {
    display: inline-block;
    float: right;
    border-radius: 14px;
    height: 28px;
    width: 140px;
    border: 1px #fff solid;
    box-shadow: 0 0 1px 0 rgba(0,0,0,0.5);
    position: relative;
    top:1px;
    right: 1px;
    text-align: center;
    outline: none;
  }
  ul{
    list-style: none;
  }
  li{
    display: inline-block;
    float: left;
    margin-right:18px;
    margin-left: 18px;
    margin-bottom: 42px;
  }
  .new-project {
    /*border: 1px solid rgba(255,255,255,1);*/
    box-shadow: 0 0 1px 0 rgba(0,0,0,0.5);
    width: 150px;
    height: 236px;
    background: url('../../src/assets/add.png') no-repeat center;
    background-size: 45px;
    background-color: #fff;
  }
  .single-project {
    /*border: 1px solid rgba(255,255,255,1);*/
    box-shadow: 0 0 1px 0 rgba(0,0,0,0.5);
    width: 150px;
    height: 236px;
    padding: 0;
  }
  /*.bj {*/
    /*width: 150px;*/
    /*height: 179.4px;*/
    /*background: url('../../src/assets/thumb.png') no-repeat;*/
    /*background-size: 150px 179.4px;*/
  /*}*/
  .single-bg {
    width:150px;
    height:179.4px;
    text-align: center;
    /*margin-bottom: 5px;*/
  }
  .single-title{
    width: 150px;
    height: 56.6px;
    padding: 8.6px 13px;
    background-color: #fff;
  }
   .single-title h1, .single-title p{
     width: 100%;
    line-height: 20px;
    font-size:10px;
    font-family:PingFangSC-Light;
    color: #3F3F3F;
    font-weight: normal;
    text-align: left;
   }

  .status {
    width: 28px;
    height: 11px;
    line-height: 11px;
    border-radius: 5px;
    float: right;
    font-size: 7px;
    font-family: PingFangSC;
    text-align: center;
    color: #fff;
    background-color: RGBA(216, 216, 216, 1);
    position: relative;
    top: 4.5px;
    font-weight: bold;
  }
  .zz {
    width: 100%;
    height:100%;
    background-color: rgba(57,57,57,1);
    opacity: 0.6;
  }
  .single-btn{
    width: 31px;
    height:31px;
    border-radius: 15.5px;
    outline: none;
    margin: 73px 5.5px;
    /*background: rgba(216,216,216,0);*/
    border: solid 1px #FFF;
  }
   .huabi {
    background: url('../../src/assets/huabi.png') no-repeat center;
    background-size: 21px 21px;
   }
  .wancheng {
    background: url('../../src/assets/wancheng.png') no-repeat center;
    background-size: 15px 15px;
  }
  .shanchu {
    background: url('../../src/assets/shanchu.png') no-repeat center;
    background-size: 21px 21px;
  }
</style>
