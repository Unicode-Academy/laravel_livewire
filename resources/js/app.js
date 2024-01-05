import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";

Alpine.directive("clipboard", (el) => {
    let text = el.textContent;

    el.addEventListener("click", () => {
        navigator.clipboard.writeText(text);
        alert("Đã copy thành công");
    });
});

Livewire.start();
