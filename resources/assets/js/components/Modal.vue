<template>
<div>
<button class="button is-primary" onclick="toggleModal()" id="add-comment">Add comment</button>
	<div class="modal" id="modal">
 	  <div class="modal-background"></div>
 		 <div class="modal-card">
 		   <header class="modal-card-head">
    		  <p class="modal-card-title">Choose a comic</p>
     		  <button class="delete" aria-label="close"></button>
    	   </header>
    		<section class="modal-card-body">
        <div class="has-text-centered">
        poopie
     	 		<slot name="comics"></slot>
    		</section>
        </div>
    		<footer class="modal-card-foot">
      			<button class="button is-danger">Cancel</button>
    		</footer>
  		</div>
	</div>
  </div>
</template>  

<script>
  var toggleModal = function() {
                var modal = document.getElementByID('modal');
                modal.classList.toggle('is-active');
            }
   export default {
        mounted() {
            console.log('Modal. mounted.')
        }
    }
</script>