<template>

<div class="row">
		<div class="col-md-4 card card-block" v-for="post in posts">
		<center>
			<a href="{{ post.url }}">
			<img src="{{ post.image_url }}" alt="" class="card-img-top img-fluid">
			</a>
			<div class="card-block">
				<a href="{{ post.url }}"><h4 class="card-title"> {{ post.title }} </h4></a>
				<p style="font-size: .7rem">{{ post.url }}</p>
				<center><a href="{{ post.url }}" class="btn btn-primary btn-lg">See more</a></center>
			</div>
		</center>
		</div>
</div>



</template>

<script>
	export default  { 
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
					this.$set('posts', response.data.data);
					this.loading = false;
				}, function (response) {
					console.log(error);
				});
			},
		}
}

</script>