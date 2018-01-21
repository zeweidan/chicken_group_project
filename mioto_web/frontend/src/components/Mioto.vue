<template>

  <div class="hello">
    <img src="@/assets/logo.png">
    <h1>{{ msg }}</h1>
    <h2>Essential Links</h2>
    <ul>
      <router-link to="/index">Go to Index</router-link>
      <router-link to="/projects">Go to Projects</router-link>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'Mioto',
  data () {
    return {
      msg: 'Mioto'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
