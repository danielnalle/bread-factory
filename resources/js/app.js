import "./bootstrap";
import "flowbite";

// const modal = document.getElementById("btn_modal");
// modal.addEventListener("click", () => {
//     Swal.fire({
//         html: document.getElementById("popup-modal").innerHTML, // Ambil HTML dari modal custom
//         showConfirmButton: false, // Nonaktifkan tombol bawaan
//         customClass: {
//             popup: "swal2-no-padding", // Kelas untuk memodifikasi desain modal
//         },
//         backdrop: true, // Aktifkan backdrop
//         willOpen: () => {
//             // Aktifkan fungsionalitas modal, jika perlu
//             document.querySelectorAll(".data-modal-hide").forEach((button) => {
//                 button.addEventListener("click", () => Swal.close());
//             });

//             const confirmButton = document.querySelectorAll(".confirm-delete"); // Tambahkan class unik pada tombol "Ya, Saya Yakin"
//             confirmButton.forEach((btn) => {
//                 btn.addEventListener("click", () => {
//                     const userId = btn.getAttribute("data-id"); // Ambil ID dari atribut data-id
//                     // Panggil backend atau Livewire menggunakan @this.call (jika pakai Livewire)
//                     // Livewire.dispatch("delete", userId); // Emit event ke Livewire

//                     // Swal.close(); // Tutup modal setelah aksi
//                 });
//             });
//         },
//     });
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
        fileName: "",
        fileSrc: "",

        // Handle "Browse" button click
        browseFile() {
            document.getElementById("fileInput").click();
        },

        // Handle Drag Over
        dragOverHandler(event) {
            event.preventDefault();
            event.currentTarget.classList.add("border-primary");
        },

        // Handle Drag Leave
        dragLeaveHandler(event) {
            event.preventDefault();
            event.currentTarget.classList.remove("border-primary");
        },

        // Handle File Drop
        dropHandler(event) {
            event.preventDefault();
            event.currentTarget.classList.remove("border-primary");
            const files = event.dataTransfer.files;
            if (files.length > 0) {
                this.fileName = files[0].name;
                this.displayFile(files[0]);
            }
        },

        // Handle File Selection via Input
        handleFiles(event) {
            const files = event.target.files;
            if (files.length > 0) {
                this.fileName = files[0].name;
                this.displayFile(files[0]);
            }
        },

        // Display File (Preview)
        displayFile(file) {
            this.fileName = file.name;
            this.fileSrc = URL.createObjectURL(file);
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
