$(document).ready(function () {
	$("#bulkForm").submit(function (e) {
		e.preventDefault(); // Hindari reload
		var formData = $(this).serialize();

		$("#resultPanel").html("<p>Mengirim pesan...</p>");

		$.ajax({
			url: "dashboard/send_bulk",
			type: "POST",
			data: formData,
			success: function (response) {
				$("#resultPanel").html(response);
			},
			error: function () {
				$("#resultPanel").html(
					'<p style="color:red;">Terjadi kesalahan saat mengirim pesan.</p>'
				);
			},
		});
	});
});
