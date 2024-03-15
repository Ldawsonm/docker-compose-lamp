function toggle_extended_banner() {
    var banner_height = document.getElementById("banner").style.height;
    const banner_short_height = "10vh";
    const banner_extend_height = "40vh";

    if(banner_height === banner_short_height || banner_height === "")
        document.getElementById("banner").style.height = banner_extend_height;
    else if(banner_height === banner_extend_height)
        document.getElementById("banner").style.height = banner_short_height;
}
