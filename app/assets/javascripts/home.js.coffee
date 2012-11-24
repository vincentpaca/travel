$(document).ready ->
  $("#loginBtn").click (e) ->
    e.preventDefault
    $("#loginModal").fadeIn "fast"
    $(".modal-overlay").fadeIn "fast"

  $("#signupBtn").click (e) ->
    e.preventDefault
    $("#signupModal").fadeIn "fast"
    $(".modal-overlay").fadeIn "fast"

  $("#signupEmailLink").click (e) ->
    e.preventDefault
    $("#signupEmail2").show()
    $("#signupEmail").hide()
    $("#signupSocial").hide()

  $("#login1").click (e) ->
    e.preventDefault
    $("#signupModal").hide()
    $("#loginModal").show()
    $("#signupSocial").show()
    $("#signupEmail").show()
    $("#signupEmail2").hide()

  $("#signUp1").click (e) ->
    e.preventDefault
    $("#loginModal").hide()
    $("#signupModal").show()

  $(".home-features-nav a").click (e) ->
    e.preventDefault
    $(this).parent().addClass("active").siblings().removeClass "active"

  $(".modal-overlay").click (e) ->
    e.preventDefault
    $(this).fadeOut "fast"
    $(".modal").fadeOut "fast"
