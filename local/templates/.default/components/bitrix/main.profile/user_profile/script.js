function show_profile(elem) {
    $('[hidden]').attr('hidden', false);
    $(elem).parent().attr('hidden', true);
}