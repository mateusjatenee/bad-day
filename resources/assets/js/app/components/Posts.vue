<template>

  <div class="row">
  <div class="col-md-4" v-if="!loading" v-for="post in posts">
    <h2>@{{ post.title }}</h2>
    <p>@{{ post.content }} </p>
    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
  </div>
</div>

</template>

<script>

	export default  { 
		template: '#top-stories',
		data() {
			return {
				posts: []
			};
		},

		created() {
			this.loading = true;
			this.fetchPosts();
		},

		methods: {
			fetchPosts() {
				this.$http.get('/api/posts').then(function(response) {
					console.log(response.data);
					this.$set('posts', response.data);
					this.loading = false;
				}, function (response) {
					console.log(error);
				});
			},
		}
}


</script>