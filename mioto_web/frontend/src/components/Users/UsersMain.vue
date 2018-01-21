<template>
  <div class="middle_box clearfix">
    <div class="left"><img src="@/assets/tail.png"></div>
    <div class="users">
      <div class="title_box clearfix">
          <router-link to="/Login" style="float: left;margin-right:37px"><span @click="qiehuan()" :class="[{'title':!cfl},{'lar':cfl}]">登陆</span></router-link>
          <router-link to="/Register" style="float: left;"><span @click="qiehuan()" :class="[{'title':!cfr},{'lar':cfr}]">注册</span></router-link>
      </div>
      <div class="content">
        <router-view></router-view>
      </div>
    </div>
    <div class="right"><img src="@/assets/mao.png"></div>
  </div>
</template>

<script>
  export default {
    name: 'Users_main',
    data () {
      return {
        msg: 'Mioto',
        cfl: true,
        cfr: false
      }
    },
    methods: {
      qiehuan: function () {
        this.cfl = !this.cfl
        this.cfr = !this.cfr
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .clearfix{
    overflow:hidden;
    _zoom:1;
  }
  .middle_box {
    height: 440px;
    width: 402px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -200px;
    margin-top: -240px;
  }
  .left {
    float: left;
    width: 40px;
    height: 54px;
    position: relative;
    top: 376px;
    border: none;

  }
  .right {
    float: left;
    position: relative;
    top: 10px;
    left: -69px;
    border: none;
  }
  .users{
    border-radius: 0 25px 25px 0;
    border: none;
    width: 291px;
    height: 418px;
    position: relative;
    top: 10px;
    box-shadow: 0 3px 8px #DF795B;
    background: #FFF;
    font-family:PingFangSC-Regular;
    float: left;
  }
  a {
    color: #525252;
    text-decoration: none;
  }
  .title_box{
    width: 183px;
    margin: 0 auto;
    margin-top: 50px;
  }
  .title{
    font-size: 20px;
    line-height: 20px;
    font-weight: bold;
  }
  .lar {
    font-size: 14px;
    font-weight: bold;
    opacity: 0.6;
    position: relative;
    top: 2px;
  }
  .content {
    width: 183px;
    margin:55px auto;
    text-align: center;
  }
</style>
