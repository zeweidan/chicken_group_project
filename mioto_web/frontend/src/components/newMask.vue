<template id="modal">
  <div>
    <div class="newMask"></div>
    <div class="modal">

      <div class="top">
        <div class="size active">自定义尺寸</div><div class="size">常见尺寸</div><button class="close" @click="close()"></button>
      </div>
      <div class="bot">
        <div class="def-size">
          <div class="chang-kuan">
            <span class="chang">长</span><input type="text" class="chang-input"/><span class="kuan">宽</span><input type="text" class="kuan-input"/>
          </div>
          <div class="xz-danwei">px(像素)</div><div class="danwei">单位: </div>
        </div>
        <div class="tip"><p>单位为px时，支持最小尺寸为40*40，支持最大尺寸为5000*5000</p><p>单位为mm时，支持最小尺寸为15*15，支持最大尺寸为1000*1000</p></div>
        <div class="zuopin"><span style="opacity: 0.6">作品名称:</span> &nbsp;<div class="zuopin-name">眼中的太阳</div><input type="text" class="mingcheng-input" placeholder="请输入章节名称"/><div class="mingcheng">名称: </div></div>
        <button class="start-btn">开始创作</button>
      </div>
    </div>

  </div>

</template>

<script>
  export default {
    name: 'newMask',
    data () {
      return {
      }
    },
    methods: {
      close: function() {
        this.$emit('Child')
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .clearfix {
    overflow: hidden;
    _zoom: 1;
  }
 .newMask {
   background-color: RGBA(69, 69, 69, 1);
   opacity: 0.5;
   position: fixed;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   z-index: 50001;
 }
  .modal {
    width: 425px;
    height: 295px;
    border-radius: 4px;
    opacity: 1;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 50002;
    font-family:  PingFangSC-Regular;
    color:rgba(84,84,84,1);
    background:rgba(247,247,247,1);

  }
  .top {
    width: 100%;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background:#fff;
    box-shadow: 0 0 1px 0 rgba(0,0,0,0.5);
    border-radius: 4px 4px 0 0;
    margin-bottom: 1px;
  }
  .size {
    display: inline-block;
    width: 99px;
    height: 100%;
  }
  .active {
    background:rgba(247,247,247,1);;
  }
  .bot {
    width: 100%;
    height: 213px;
    position: relative;
    bottom: 0;
    background:rgba(247,247,247,1);
    border-radius: 0 0 4px 4px;
    color: RGBA(63, 63, 63, 1);
  }
  .def-size {
    width: 100%;
    height: 34px;
    line-height: 34px;
    margin-top: 30px;
    padding-left: 79px;
    padding-right: 38px;
  }
  .chang-kuan {
    width: 158px;
    height: 34px;
    display: inline-block;
    float: left;
    border: none;
    box-shadow: 0 0 1px 0 RGBA(0, 0, 0, 0.5);
    background: #FFF;
    font-size: 11px;
    font-family:PingFangSC-Regular;
    color:rgba(84,84,84,1);
  }
  .chang {
    padding: 0 10px;
  }
  .chang-input {
    padding-right:10px ;
    display: inline-block;
    /*float: left;*/
    width: 53px;
    border: none;
    outline: none;
    background: none;
  }
  .kuan {
    display: inline-block;
    width: 28px;
    text-align: right;
    background: url("../../src/assets/link.png")no-repeat left center;
    background-size: 11px;
  }
  .kuan-input {
    display: inline-block;
    width: 35px;
    border: none;
    outline: none;
    padding-left: 10px;
    background: none;
  }
  .danwei {
    display: inline-block;
    width: 40px;
    height: 34px;
    line-height: 34px;
    float: right;
    opacity: 0.6;
    text-align: center;
    font-size: 11px;
  }
  .xz-danwei {
    width: 99px;
    height: 34px;
    background: #FFF;
    display: inline-block;
    float: right;
    box-shadow: 0 0 1px 0 RGBA(0, 0, 0, 0.5);
    padding-left: 8px;
  }
  .tip {
    font-size:10px;
    font-family:PingFangSC-Light;
    text-align: center;
    color:rgba(126,126,126,1);
    padding-top: 15px;
    padding-bottom: 21px;
  }
  .zuopin {
    height: 28px;
    line-height: 28px;
    padding-left: 42px;
    font-size: 11px;
    margin-bottom: 24px;
  }
  .zuopin-name {
    display: inline-block;
    height:100%;
    width: 140px;
    padding: 0 13px;
    background: #FFF;
    box-shadow: 0 0 1px 0 RGBA(0, 0, 0, 0.5);
  }
  .mingcheng{
    display: inline-block;
    width: 40px;
    height: 28px;
    line-height: 28px;
    float: right;
    opacity: 0.6;
    text-align: center;
  }
  .mingcheng-input {
    display: inline-block;
    float: right;
    width: 106px;
    outline: none;
    padding: 0 8px;
    border: none;
    box-shadow: 0 0 1px 0 RGBA(0, 0, 0, 0.5);
    margin-right: 31px;
  }
  .start-btn {
    width: 184px;
    height: 34px;
    line-height: 34px;
    background:rgba(255,146,115,1);
    text-align: center;
    border: none;
    color: #FFF;
    font-size: 12px;
    font-family:PingFangSC-Medium;
    display: block;
    margin: 0 auto;
    outline: none;
    font-weight: bold;
  }
  .close {
    width: 18px;
    height: 18px;
    background: url("../../src/assets/close.png") no-repeat left center;
    background-size: 18px 18px;
    z-index: 50003;
    position: relative;
    right: -126px;
    border: none;
    top: -7px;
  }
</style>
