<script>

	import Favorite from './Favorite.vue';
	export default {
		props : ['attributes'],

		components: {Favorite},
		
		data() {
			return {
				editing : false,
				comment: this.attributes.comment
			};
		},
		methods: {
			update() {
				axios.patch('/comments/' + this.attributes.id, {
					comment: this.comment
				});

				this.editing = false;

				flash('Updated!');
			},

			destroy() {
				axios.delete('/comments/'+ this.attributes.id);
				
				$(this.$el).fadeOut(800, () => {
					flash('Your comment Deleted');
				});
			
			}
		}
	}
</script>