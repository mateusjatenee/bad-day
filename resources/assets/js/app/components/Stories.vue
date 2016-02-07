<template>

<div class="row">
		<div class="col-md-4 card card-block" v-for="post in posts">
		<center>
			<a href="{{ post.url }}">
			<img src="{{ post.image_url }}" alt="" class="card-img-top img-fluid img-stories">
			</a>
			<div class="card-block card-block-bottom">
				<a href="{{ post.url }}"><h4 class="card-title"> {{ post.title }} </h4></a>
				<p style="font-size: .7rem">{{ post.url }}</p>
				<center><a href="{{ post.url }}" class="btn btn-primary btn-lg">See more</a></center> <br>
				<center><button role="button" class="btn btn-lg btn-danger" v-if="logged_in" @click="reportPost(post)">Report</button></center>
			</div>
		</center>
		</div>
</div>



</template>

<script>
	export default  { 
		data() {
			return {
				posts: [],
				logged_in: null,
			};
		},

		props: ['logged_in'],

		created() {
			this.loading = true;
			this.fetchPosts();
			console.log(this.logged_in);
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

			reportPost(post) {
				var resource = this.$resource('/api/posts{/id}/report');
				this.$http.post('/api/posts/'+post.id+'/report').then(function (data) {
					console.log(data.data);
				}, function (data) {
					console.log(data);
				});
			}
		}
}

</script>