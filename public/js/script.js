$(document).ready(function() {
    const navLinks = $('.navbar .nav-link');
    const sections = $('section');

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function highlightNavLink() {
        sections.each(function(index, section) {
            const sectionId = $(section).attr('id');
            const navLink = $(`.navbar .nav-link[href*="#${sectionId}"]`);
            if (isInViewport(section)) {
                navLinks.removeClass('active');
                navLink.addClass('active');
            }
        });
    }

    $(window).on('scroll', function() {
        highlightNavLink();
    });

    // Initial invocation to highlight the correct navigation link on page load
    highlightNavLink();
});

$(document).ready(function() {
    $("#bars-icon").click(function () {
        $("#mainmenu").slideToggle(300);
        $(".blur").toggleClass("blur-background");
    });

    if ($(window).width() <= 900) {
        $("#mainmenu .nav-link").click(function() {
            $("#mainmenu").slideUp(300);
            $(".blur").removeClass("blur-background");
        });
    }
});

// $(document).ready(function() {
//     $('.card__inner').click(function() {
//         $(this).toggleClass('is-flipped');
//     });
// });

$(document).ready(function() {
    if ($(".card__inner").data('auth') === true) {
        $('.card__inner').click(function() {
            $(this).toggleClass('is-flipped');
        });
    } else {
        $('.card__inner').click(function() {
            window.location.href = '/login';
        });
    }
});

function renderProducts(sortBy, filterBy) {
    const productContainer = $(".product-container");
    productContainer.empty();

    products.forEach(product => {
        const productItem = $("<div>").addClass("product-item");
        const productImg = $("<img>").attr("src", "img/sample-product.jpg").attr("alt", product.name).addClass("product-img");
        const productInfo = $("<div>").addClass("product-info");
        const productName = $("<h2>").addClass("product-title").text(product.name);
        const productPrice = $("<p>").addClass("product-price").text("₱" + product.price.toFixed(2));
        const priceCrashout = $("<p>").addClass("price-crashout").text("₱299.99");
        const addToCartBtn = $("<button>").addClass("btn-add-to-cart");
        const cartIcon = $("<i>").addClass("fa fa-shopping-cart").attr("style", "font-size: 24px; color: black; padding: 5px;");
        const addToCartText = $("<span>").text("Add to Cart").css("color", "black");

        addToCartBtn.append(cartIcon, addToCartText);
        productInfo.append(productName, productPrice, priceCrashout, addToCartBtn);
        productItem.append(productImg, productInfo);
        productContainer.append(productItem);
    });

    updateProductCount();
}


// function updateTime() {
//     const now = new Date();
//     let hours = now.getHours();
//     const minutes = now.getMinutes().toString().padStart(2, '0');
//     const seconds = now.getSeconds().toString().padStart(2, '0');
//     const meridiem = hours >= 12 ? 'PM' : 'AM';
//     hours = (hours % 12) || 12;

//     const timeString = `${hours}:${minutes}:${seconds} ${meridiem}`;

//     document.getElementById('time').textContent = timeString;
//   }

//   setInterval(updateTime, 1000);

//   updateTime();

function formatPrice(input) {

    let value = parseFloat(input.value.replace(/,/g, '')); // Remove commas and parse as float
    if (!isNaN(value)) {

        value = Math.round(value * 100) / 100;
        input.value = value.toFixed(2);
    } else {
        input.value = '';
    }
}

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = $(".mySlides");
  let dots = $(".dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

// $(document).ready(function() {
//     var countDownDate = new Date("May 4, 2024 18:00:00").getTime();
//     var x = setInterval(function() {
//         var now = new Date().getTime();
//         var distance = countDownDate - now;
//         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
//         var countdownText = days + "d " + hours + "h " + minutes + "m " + seconds + "s";
//         $("#demo").text(countdownText);
//         if (distance < 0) {
//             clearInterval(x);
//             $("#demo").text("EXPIRED");
//         }
//     }, 1000);
// });

$(document).ready(function() {
    const slideContainer = $('.p-img');
    const slides = slideContainer.find('img');
    const numSlides = slides.length;
    const slideWidth = slides.first().width();

    let currentIndex = 0;

    function updateButtonState() {
        $('.arrow-left').prop('disabled', currentIndex <= 0);
        $('.arrow-right').prop('disabled', currentIndex >= numSlides - 1);
    }

    function goToSlide(index) {
        const slideOffset = -index * slideWidth;
        slideContainer.css('transform', `translateX(${slideOffset}px)`);
        currentIndex = index;
        updateButtonState();
    }

    $('.arrow-left').on('click', () => {
        goToSlide(currentIndex - 1);
    });

    $('.arrow-right').on('click', () => {
        goToSlide(currentIndex + 1);
    });

    updateButtonState();
});

// $(document).ready(function() {
//     const imgContainer = $('.category-product');
//     const moreBtn = $('.more-btn');
//     const images = imgContainer.find('img');

//     const numVisibleImages = window.innerWidth < 900 ? 2 : 8;
//     images.slice(numVisibleImages).addClass('hidden');

//     moreBtn.on('click', function() {
//         const hiddenImages = images.filter('.hidden');

//         hiddenImages.slice(0, numVisibleImages).removeClass('hidden');

//         if (hiddenImages.length <= numVisibleImages) {
//             $(this).hide();
//         }
//     });
// });

$(document).ready(function() {
    const loadmore = $('.more-btn');
    let currentItems = 6;

    loadmore.on('click', function(e) {
        const elementList = $('.category-product img');
        $(e.target).addClass('show-loader');

        const itemsPerLoad = calculateItemsPerLoad(); // Calculate items to load dynamically

        for (let i = currentItems; i < currentItems + itemsPerLoad; i++) {
            if (elementList[i]) {
                $(elementList[i]).css('display', 'flex').addClass('visible');
            }
        }

        currentItems += itemsPerLoad;

        if (currentItems >= elementList.length) {
            $(e.target).addClass('loaded').hide();
        }

        $(e.target).removeClass('show-loader');
    });

    // Function to calculate number of items to load based on screen width
    function calculateItemsPerLoad() {
        const screenWidth = $(window).width();

        if (screenWidth < 600) { // For small screens (e.g., mobile)
            return 2; // Load 2 items per click
        } else if (screenWidth < 900) { // For medium screens (e.g., tablets)
            return 4; // Load 4 items per click
        } else { // For large screens (e.g., desktop)
            return 6; // Load 6 items per click
        }
    }

    // Update items per load on window resize
    $(window).on('resize', function() {
        const itemsPerLoad = calculateItemsPerLoad();
        currentItems = Math.min(currentItems, elementList.length); // Reset currentItems if needed
    });
});

$(document).ready(function() {
    $("#loginMessage").delay(2000).fadeOut("slow");
});

function showContent(contentId) {
    $('.content').hide();
    $('#sidebar-nav ul li').removeClass('active');
    $('#' + contentId + '-content').show();
    $('#sidebar-nav ul li:has(a[href="#"][onclick*="' + contentId + '"])').addClass('active');
}

function toggleSidebar() {
    $("#sidebar").toggleClass("collapsed");
    $("#main-content").toggleClass("expanded");
}

$(document).ready(function() {
    var widgets = $('.widget'); // Get all widget elements
    var currentIndex = 0;

    function showWidget(index) {
        // Hide all widgets
        widgets.hide();
        // Show the widget at the specified index
        widgets.eq(index).show();
    }

    function rotateWidgets() {
        // Show the next widget
        showWidget(currentIndex);
        // Increment the index, and reset to 0 if it exceeds the number of widgets
        currentIndex = (currentIndex + 1) % widgets.length;
    }

    // Call rotateWidgets function every 5 seconds (adjust as needed)
    setInterval(rotateWidgets, 5000); // Change 5000 to desired interval in milliseconds
});

function openMessage() {
    document.getElementById("messagePopup").style.display = "block";
    // Simulate receiving a message (replace with actual logic)
    receiveMessage("Hello! This is a received message.");
}

function receiveMessage(message) {
    var receivedMessageDiv = document.getElementById("receivedMessage");
    receivedMessageDiv.textContent = message;
}

function closeMessage() {
    document.getElementById("messagePopup").style.display = "none";
}

$(document).ready(function() {

});

$(document).ready(function() {
    $(".nav-mail").click(function() {
        openMessage();
    });
});

const numberOfSpaces = 10;

let result = '';

for (let i = 0; i < numberOfSpaces; i++) {
    result += '&nbsp;';
}

console.log(result);


const pusherKey = document.getElementById('pusherConfig').getAttribute('data-key');
const pusher = new Pusher(pusherKey, {cluster: 'eu'});
const channel = pusher.subscribe('public');

channel.bind('chat', function (data) {
    $.post("/receive", {
        _token: '{{csrf_token()}}',
        message: data.message,
    })
    .done(function (res) {
        $(".message > .message").last().after(res);
        $(document).scrollTop($(document).height());
    });
});

$("form").submit(function (event) {
    event.preventDefault();

    $.ajax({
        url: "/broadcast",
        method: 'POST',
        headers: {
            'X-Socket-Id': pusher.connection.socket_id
        },
        data: {
            _token: '{{csrf_token()}}',
            message: $("form #message").val(),
        }
    }).done(function (res) {
        $(".message > .message").last().after(res);
        $("form #message").val('');
        $(document).scrollTop($(document).height());
    });
});

// $(document).ready(function() {
//     $("#toggleChat").click(function() {
//         console.log("Toggle button clicked");
//         $("#chatContainer").siblings().toggle()
//     });
// });

// document.getElementById("toggleChat").addEventListener("click", function() {
//     console.log("Toggle button clicked"); // Check if this message appears in the console
//     var chatContainer = document.getElementById("chatContainer");
//     if (chatContainer.style.display === "none") {
//         chatContainer.style.display = "block";
//     } else {
//         chatContainer.style.display = "none";
//     }
// });

function openForm() {
    $("#chatContainer").css("display", "block");
    $("#chatContainer").fadeIn(500);
}

function closeForm() {
    $("#chatContainer").css("display", "none");
    $("#chatContainer").fadeOut(500);
}

function openForm() {
    // $("#myForm").css("display", "block");
    var chatPopup = $(".chat-popup");
    chatPopup.css("display", "block");
    setTimeout(function() {
        chatPopup.css("bottom", "23px");
    }, 10);
}

  function closeForm() {
    // $("#myForm").css("display", "none");
    var chatPopup = $(".chat-popup");
    chatPopup.css("bottom", "-100%");
    setTimeout(function() {
        chatPopup.css("display", "none");
    }, 300);
}

function sendMessage(event) {
    event.preventDefault();

    var messageInput = $("#message-input");
    var message = messageInput.val().trim();

    if (message !== "") {
        var chatMessages = $("#chat-messages");
        var newMessage = $("<div>").text(message);
        chatMessages.append(newMessage);
        messageInput.val("");
    }
}

function scrollToBottom() {
    var chatMessages = $(".chat-messages");
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

scrollToBottom();
