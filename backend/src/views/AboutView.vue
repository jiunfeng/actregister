<template>
  <div class="about">
    <h1>This is an about page</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      datalist: []
    }
  },
  methods: {
    async getlist() {
      const respon = await this.$axios.get('http://localhost:3000/posts')
      this.datalist = respon
      console.log(this.datalist.data)
    }
  },
  mounted() {
    this.getlist()
  },
}
</script>