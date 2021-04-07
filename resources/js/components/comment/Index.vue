<template>
    <div>
        <h1>コメント</h1>
        <div
            class="max-w-sm mx-auto flex p-5 m-10 bg-white rounded-3g shadow-xl"
        >
            <div class="ml-6 pt-1">
                <h4 class="text-xl text-green-600 leading-tight">コメント一覧</h4>
                <div v-for="object in objects" :key="object.id">
                    <p class="text-base text-grey-600 leading-normal">
                      {{ object.comment}}
                    </p>
                </div>
            </div>
        </div>
        <router-link :to="{ name: 'home' }">Home</router-link>
    </div>
</template>

<script>
export default {
  name: 'CommentIndex',

  data() {
    return {
      objects: [],
    }
  },

  mounted() {
    this.fetchComments()
  },

  methods: {
    async fetchComments() {
      const res = await window.axios.get('/api/comments')
      this.objects = res.data
    },
  },
}
</script>