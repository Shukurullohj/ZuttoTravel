<template>
	<div>
	<button type="submit" class="" @click="toggle">
		<i class="fa fa-heart" aria-hidden="true"></i>
		<span v-text="favoritesCount"></span> 		
	</button>
	</div>
</template>

<script>
	export default {
		props : ['comment'],
		data() {
			return {
				favoritesCount : this.comment.favoritesCount,
				isFavorited : this.comment.isFavorited
			}
		},
		methods : {
			toggle () {
				if(this.isFavorited) {
					axios.delete('/comments/' + this.comment.id + '/favorites');

					this.favoritesCount = true;
					this.favoritesCount--;

				}else {
					axios.post('/comments/' + this.comment.id + '/favorites');


					this.favoritesCount = true;
					this.favoritesCount++;
				}
			}
		}

	}
</script>