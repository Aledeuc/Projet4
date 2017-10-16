var stripe = Stripe('pk_test_WYvpEHPHdIksCPWlOKjoGN3P');
var elements = stripe.elements();
stripe.createToken(card).then(function(result) {
    // Handle result.error or result.token
  });