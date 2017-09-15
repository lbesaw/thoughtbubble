<template>
<div>
	<nav class="level">
		<div class="level-left">
		</div>
		<div class="level-right is-white">
			<div class="level-item">
				<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world">
					<img src="/images/twitter.png">
				</a>
			</div>
			<div class="level-item">
				<img src="/images/facebook.png">
			</div>
			<div class="level-item">
				<img src="/images/copy.png">
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