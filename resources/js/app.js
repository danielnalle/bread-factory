import "./bootstrap";
import "flowbite";
import Swal from "sweetalert2";

window.Swal = Swal;

window.addEventListener("alert", (event) => {
    let data = event.detail[0];
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });
    Toast.fire({
        icon: data.type,
        title: data.message,
    });
});

window.addEventListener("deleteConfirm", (event) => {
    Swal.fire({
        html: document.getElementById("popup-modal").innerHTML,
        showConfirmButton: false,
        customClass: {
            popup: "swal2-no-padding",
        },
        backdrop: true,
        willOpen: () => {
            document.querySelectorAll(".data-modal-hide").forEach((button) => {
                button.addEventListener("click", () => Swal.close());
            });

            const confirmButton = document.querySelectorAll(".confirm-delete");
            confirmButton.forEach((btn) => {
                btn.addEventListener("click", () => {
                    Livewire.dispatch(event.detail[0].trigger);
                    Swal.close();
                });
            });
        },
    });
});

// window.addEventListener("showModal", (event) => {
//     const modal = document.getElementById("alamat-modal");
//     if (modal) {
//         modal.classList.remove("hidden");
//         modal.classList.add("flex");
//     }
// });

document.addEventListener("DOMContentLoaded", () => {
    // Light switcher
    const lightSwitches = document.querySelectorAll(".light-switch");
    if (lightSwitches.length > 0) {
        lightSwitches.forEach((lightSwitch, i) => {
            if (localStorage.getItem("dark-mode") === "true") {
                lightSwitch.checked = true;
            }
            lightSwitch.addEventListener("change", () => {
                const { checked } = lightSwitch;
                lightSwitches.forEach((el, n) => {
                    if (n !== i) {
                        el.checked = checked;
                    }
                    s;
                });
                document.documentElement.classList.add(
                    "[&_*]:!transition-none"
                );
                if (lightSwitch.checked) {
                    document.documentElement.classList.add("dark");
                    document.querySelector("html").style.colorScheme = "dark";
                    localStorage.setItem("dark-mode", true);
                    document.dispatchEvent(
                        new CustomEvent("darkMode", { detail: { mode: "on" } })
                    );
                } else {
                    document.documentElement.classList.remove("dark");
                    document.querySelector("html").style.colorScheme = "light";
                    localStorage.setItem("dark-mode", false);
                    document.dispatchEvent(
                        new CustomEvent("darkMode", { detail: { mode: "off" } })
                    );
                }
                setTimeout(() => {
                    document.documentElement.classList.remove(
                        "[&_*]:!transition-none"
                    );
                }, 1);
            });
        });
    }
});

document.addEventListener("alpine:init", () => {
    Alpine.data("fileUpload", () => ({
        browseFile() {
            document.getElementById("image").click();
        },

        dragOverHandler(event) {
            event.currentTarget.classList.add("border-primary");
        },

        dragLeaveHandler(event) {
            event.currentTarget.classList.remove("border-primary");
        },

        dropHandler(event) {
            event.currentTarget.classList.remove("border-primary");
        },
    }));
});
document.addEventListener("alpine:init", () => {
    Alpine.data("userImgUpload", () => ({
        browseFile() {
            document.getElementById("imgProfile").click();
        },
        submitForm() {
            console.log("behasil");
            const submitButton = document.getElementById("btn-save");

            if (submitButton) {
                // submitButton.click();
                console.log("button di click");
            }
        },
    }));
});

document.addEventListener("alpine:init", () => {
    Alpine.data("stickyHandler", () => ({
        checkSticky() {
            const stickyElements = [
                document.getElementById("sticky-element"),
                document.getElementById("sticky-element-mobile"),
            ];
            stickyElements.forEach((element) => {
                if (element) {
                    const rect = element.getBoundingClientRect();
                    if (rect.bottom >= window.innerHeight) {
                        element.classList.add("shadow-custom-sticky");
                        element.classList.remove("shadow-sm");
                    } else {
                        element.classList.remove("shadow-custom-sticky");
                        element.classList.add("shadow-sm");
                    }
                }
            });
        },
        init() {
            window.addEventListener("scroll", this.checkSticky);
            this.checkSticky(); // Check on load
        },
    }));
});
