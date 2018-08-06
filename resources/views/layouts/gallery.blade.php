<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">What we've done for people</p>

    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="A microphone">
        </div>
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="A phone">
        </div>
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="A drone">
        </div>
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="Soundbox">
        </div>
    </div>

    <div class="w3-row-padding w3-section">
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="A tablet">
        </div>
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="A camera">
        </div>
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)"
                 class="w3-hover-opacity" alt="A typewriter">
        </div>
        <div class="w3-col l3 m6">
            <img src="https://www.w3schools.com/w3images/tech_tableturner.jpg" style="width:100%"
                 onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
        </div>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>


<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }
</script>