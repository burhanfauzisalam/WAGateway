let barcode = $("#barcode");
const email = $("#email").val();

$(document).ready(function async() {
	console.log("oke");
	loginWA();
});

const loginWA = async () => {
	try {
		const res = await axios.get(` ${base_url}/settings/login_wa`);

		console.log(res);
		if (res.data.html == '{"message":"Session already exist"}') {
			barcode.html(
				`<a href="#" class="btn btn-danger" id="logout-wa">Logout</a>`
			);
			$("#logout-wa").on("click", handleLogout);
		} else {
			barcode.html(res.data.html);
			$("#qrcode").addClass("qrcode");
		}
	} catch (error) {
		console.log(error);
	}
};

const handleLogout = async function (e) {
	e.preventDefault(); // Hindari reload default <a>

	try {
		await axios.get(
			`https://wa-gateway.bukansarjanakomputer.web.id/session/logout?session=${email}`
		);
		// Jika sukses, redirect ke halaman awal
		window.location.href = "/wagateway/settings";
	} catch (err) {
		console.error("Logout gagal:", err);
		alert("Gagal logout. Coba lagi.");
	}
};
