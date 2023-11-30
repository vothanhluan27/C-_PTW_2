
    const arrowleft = document.querySelector('.arrow-left');
    const arrowext = document.querySelector('.arrow-next');
    const listth = document.querySelector('.list-item-th');
    const listitemth = document.querySelectorAll('.list-item-th .item-th');

    var translateY = 0;
    var count = listitemth.length
    console.log(count);

    arrowleft.addEventListener('click', function(event) {
        event.preventDefault()

        if (count == 4) {
            // Xem hết
            return false
        }
        translateY += 118;
        listth.style.transform = `translateY(${translateY}px)`
        count++;
    })
    arrowext.addEventListener('click', function(event) {
        event.preventDefault()
        if (count == 1) {
            // Xem hết
            return false
        }
        translateY += -118;
        listth.style.transform = `translateY(${translateY}px)`;
        count--;
    })
