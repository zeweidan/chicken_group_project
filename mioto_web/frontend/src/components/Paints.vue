<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
    Here to paint..............
    </p>
    <Button type="primary">Primary</Button>
    <Button type="ghost">Ghost</Button>
    <Button type="dashed">Dashed</Button>
    <Button type="text">Text</Button>
  </div>
</template>

<script>
export default {
  name: 'Paints',
  data () {
    return {
      msg: 'Here to paint'
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
