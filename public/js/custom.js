const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);
accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        accordionItemHeader.classList.toggle("actives");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("actives")) {
            accordionItemBody.style.maxHeight =
                accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});
