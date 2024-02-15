<button id = "rzp-button1">Pay</button>
		<script src = "https://checkout.razorpay.com/v1/checkout.js"></script>
		<script>
			var options = {
				"key": "key_id",
				"subscription_id": "sub_00000000000001",
				"name": "Acme Corp.",
				"description": "Monthly Test Plan",
				"image": "/your_logo.jpg",
				"callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
				"prefill": {
					"name": "Gaurav Kumar",
					"email": "gaurav.kumar@example.com",
					"contact": "+919876543210"
				},
				"notes": {
					"note_key_1": "Tea. Earl Grey. Hot",
					"note_key_2": "Make it so."
				},
				"theme": {
					"color": "#F37254"
				}
			};
			var rzp1 = new Razorpay(options);
			document.getElementById('rzp-button1').onclick = function(e) {
				rzp1.open();
				e.preventDefault();
			}
			</script>