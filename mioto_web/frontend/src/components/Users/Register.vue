<template>
  <Form ref="formInline" :model="formInline" :rules="ruleInline">
    <FormItem prop="user">
      <input type="text" v-model="formInline.user" class="input_field" placeholder="请输入用户名" />
    </FormItem>
    <FormItem prop="email">
      <input type="text" v-model="formInline.email" class="input_field"  placeholder="请输入邮箱" />
    </FormItem>
    <FormItem prop="password">
      <input type="password" v-model="formInline.password" class="input_field" placeholder="请输入密码" />
    </FormItem>
    <FormItem>
      <button class="submit" @click="handleSubmit('formInline')"><b>喵</b></button>

      <!--<Button type="warning" @click="handleSubmit('formInline')">点击注册</Button>-->
    </FormItem>
  </Form>
</template>
<script>
  export default {
    data () {
      return {
        formInline: {
          user: '',
          email: '',
          password: ''
        },
        ruleInline: {
          user: [
            { required: true, message: '请输入用户名', trigger: 'blur' }
          ],
          email: [
            { required: true, message: '请输入邮箱', trigger: 'blur' }
          ],
          password: [
            { required: true, message: '请输入密码', trigger: 'blur' },
            { type: 'string', min: 6, message: '密码长度不能小于6位', trigger: 'blur' }
          ]
        }
      }
    },
    methods: {
      handleSubmit (name) {
        this.$refs[name].validate((valid) => {
          if (valid) {
            this.$Message.success('成功!')
          } else {
            this.$Message.error('失败!')
          }
        })
      }
    }
  }
</script>

<style scoped>
  .clearfix{overflow:hidden;_zoom:1;}
  .input_field {
    border-radius: 18.5px;
    padding: 7px;
    text-indent: 10px;
    border:none;
    box-shadow: rgba(0,0,0,0.5) 0 0 1px 0;
    width: 183px;
    height: 29px;
    font-size: 13px;
    outline: none;
  }
  .submit {
    /*background: url("/frontend/src/assets/submit.png") no-repeat center;*/
    background-color: #FDA085;
    width: 57px;
    height: 57px;
    border: none;
    border-radius: 28.5px;
    outline:none;
    user-select: none;
    color: #FFF;
    margin-top: 16px;
  }
</style>

