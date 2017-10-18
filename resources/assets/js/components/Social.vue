<template>
<div>
	<nav class="level">
		<div class="level-left">
		</div>
		<div class="level-right is-white">
			<div class="level-item">
				<slot name="twitter"></slot>
			</div>
			<div class="level-item">
				<slot name="facebook"></slot>
			</div>
		</div>
	</nav>
</div>
</template>  

<script>

	

   export default {
        mounted() {
            console.log('social mounted.')
        }
    }
</script>