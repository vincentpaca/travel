$(document).ready ->
  $("#loginBtn").click ->
    $("#loginModal").fadeIn "fast"
    $(".modal-overlay").fadeIn "fast"

  $("#signupBtn").click (e) ->
    e.preventDefault
    $("#signupModal").fadeIn "fast"
    $(".modal-overlay").fadeIn "fast"

  $("#signupEmailLink").click ->
    $("#signupEmail2").show()
    $("#signupEmail").hide()
    $("#signupSocial").hide()

  $("#login1").click ->
    $("#signupModal").hide()
    $("#loginModal").show()
    $("#signupSocial").show()
    $("#signupEmail").show()
    $("#signupEmail2").hide()

  $("#signUp1").click ->
    $("#loginModal").hide()
    $("#signupModal").show()

  $(".home-features-nav a").click ->
    $(this).parent().addClass("active").siblings().removeClass "active"

  $(".modal-overlay").click ->
    $(this).fadeOut "fast"
    $(".modal").fadeOut "fast"


