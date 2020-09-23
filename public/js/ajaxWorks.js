$(document).ready(function() {
    // Insert Complaints part
    $("#btnComplaint").click(function() {
        var items = $("#complaintItems").val();
        // var lastval=$("#complaints").val();
        $("#complaints").val(items);
    });
    // Insert Complaints part
    // Insert Complaints part
    $("#btnAdvice").click(function() {
        var items = $("#adviceItems").val();
        // var lastval=$("#complaints").val();
        $("#adescription").val(items);
    });
    // Insert Complaints part
    // Insert Complaints part
    $("#btnInvestigation").click(function() {
        var items = $("#investigationItems").val();
        // var lastval=$("#complaints").val();
        $("#idescription").val(items);
    });
    // Insert Complaints part
    // Insert Complaints part
    $("#btnExamination").click(function() {
        var eItems = $("#examinationItems").val();
        // var lastval=$("#complaints").val();

        $("#edescription").val(eItems);
    });
    // Insert Complaints part

    // Insert medicine part here
    $("#btninsertMed").click(function() {
        if ($("#medtype").val() == "Mouthwash") {
            var medtype = $("#medtype").val();
            var medName1 = $("#medName").val();
            var medName2 = $("#medName2").val();
            var usage =
                "১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\nকুলকুচি করবেন দিন ২ বার।";
            var lastval = $("#prescription").val();
            if ($("#medName2").val() == "") {
                $("#prescription").val(
                    lastval + medtype + " " + medName1 + "\n" + usage + "\n\n"
                );
            } else {
                $("#prescription").val(
                    lastval +
                        medtype +
                        " " +
                        medName1 +
                        "\n     +\n" +
                        medName2 +
                        "\n" +
                        usage +
                        "\n\n"
                );
            }
            $("#medName").val("");
            $("#medName2").val("");
            $("#medtype").val("");
        } else if ($("#medtype").val() == "Toothpaste") {
            var medtype = $("#medtype").val();
            var medName1 = $("#medName").val();
            var medName2 = $("#medName2").val();
            var usage = "সকালে এবং রাতে খাবার পর দাঁত ব্রাশ করবেন।";
            var lastval = $("#prescription").val();
            $("#prescription").val(
                lastval + medtype + " " + medName1 + "\n" + usage + "\n\n"
            );
            $("#medName").val("");
            $("#medName2").val("");
            $("#medtype").val("");
        } else if ($("#medtype").val() == "Lotion") {
            var medtype = $("#medtype").val();
            var medName1 = $("#medName").val();
            var usage = "৫/৬ ফোঁটা তুলায় করে দাঁতে/মাড়িতে ঘষবে দিন ৩ বার।";
            var lastval = $("#prescription").val();
            $("#prescription").val(
                lastval + medtype + " " + medName1 + "\n" + usage + "\n\n"
            );
            $("#medName").val("");
            $("#medName2").val("");
            $("#medtype").val("");
        } else {
            var medtype = $("#medtype").val();
            var medName = $("#medName").val();
            var medpower = $("#medpower").val();
            var howTo = $("#howTo").val();
            var whenTo = $("#whenTo").val();
            var howLong = $("#howLong").val();
            var lastval = $("#prescription").val();
            $("#prescription").val(
                lastval +
                    $("#medtype").val() +
                    " " +
                    $("#medName").val() +
                    " " +
                    $("#medpower").val() +
                    "\n     " +
                    $("#howTo").val() +
                    " - " +
                    $("#whenTo").val() +
                    " - " +
                    $("#howLong").val() +
                    "\n\n"
            );
            $("#medtype").val("");
            $("#medName").val("");
            $("#medpower").val("");
            $("#howTo").val("");
            $("#whenTo").val("");
            $("#howLong").val("");
        }
    });

    $("#btninsertMed2").click(function() {
        if ($("#medtype").val() == "Mouthwash") {
            var medtype = $("#medtype").val();
            var medName1 = $("#medName").val();
            var medName2 = $("#medName2").val();
            var usage =
                "১০ মিঃলিঃ ঔষধের সাথে ১০ মিঃলিঃ পানি মিশিয়ে\nকুলকুচি করবেন দিন ২ বার।";
            var lastval = $("#prescription").val();
            if ($("#medName2").val() == "") {
                $("#prescription").val(
                    lastval + "\n\n" + medtype + " " + medName1 + "\n" + usage
                );
            } else {
                $("#prescription").val(
                    lastval +
                        "\n\n" +
                        medtype +
                        " " +
                        medName1 +
                        "\n     +\n" +
                        medName2 +
                        "\n" +
                        usage
                );
            }
            $("#medName").val("");
            $("#medName2").val("");
            $("#medtype").val("");
        } else if ($("#medtype").val() == "Toothpaste") {
            var medtype = $("#medtype").val();
            var medName1 = $("#medName").val();
            var medName2 = $("#medName2").val();
            var usage = "সকালে এবং রাতে খাবার পর দাঁত ব্রাশ করবেন।";
            var lastval = $("#prescription").val();
            if ($("#medName2").val() == "") {
                $("#prescription").val(
                    lastval + "\n\n" + medtype + " " + medName1 + "\n" + usage
                );
            } else {
                $("#prescription").val(
                    lastval +
                        "\n\n" +
                        medtype +
                        " " +
                        medName1 +
                        "\n     +\n" +
                        medName2 +
                        "\n" +
                        usage
                );
            }
            $("#medName").val("");
            $("#medName2").val("");
            $("#medtype").val("");
        } else if ($("#medtype").val() == "Lotion") {
            var medtype = $("#medtype").val();
            var medName1 = $("#medName").val();
            var medName2 = $("#medName2").val();
            var usage = "৫/৬ ফোঁটা তুলায় করে দাঁতে/মাড়িতে ঘষবে দিন ৩ বার।";
            var lastval = $("#prescription").val();
            if ($("#medName2").val() == "") {
                $("#prescription").val(
                    lastval + "\n\n" + medtype + " " + medName1 + "\n" + usage
                );
            } else {
                $("#prescription").val(
                    lastval +
                        "\n\n" +
                        medtype +
                        " " +
                        medName1 +
                        "\n     +\n" +
                        medName2 +
                        "\n" +
                        usage
                );
            }
            $("#medName").val("");
            $("#medName2").val("");
            $("#medtype").val("");
        } else {
            var medtype = $("#medtype").val();
            var medName = $("#medName").val();
            var medpower = $("#medpower").val();
            var howTo = $("#howTo").val();
            var whenTo = $("#whenTo").val();
            var howLong = $("#howLong").val();
            var lastval = $("#prescription").val();
            $("#prescription").val(
                lastval +
                    "\n\n" +
                    $("#medtype").val() +
                    " " +
                    $("#medName").val() +
                    " " +
                    $("#medpower").val() +
                    "\n     " +
                    $("#howTo").val() +
                    " - " +
                    $("#whenTo").val() +
                    " - " +
                    $("#howLong").val()
            );
            $("#medtype").val("");
            $("#medName").val("");
            $("#medpower").val("");
            $("#howTo").val("");
            $("#whenTo").val("");
            $("#howLong").val("");
        }
    });
    // Insert medicine part here
    $("#medtype").keyup(function() {
        if ($("#medtype").val() == "Mouthwash") {
            $("#hide1").hide("slow");
            $("#hide2").hide("slow");
            $("#hide3").hide("slow");
            $("#hide4").hide("slow");
            $("#hide5").show("slow");
        } else if ($("#medtype").val() == "Toothpaste") {
            $("#hide1").hide("slow");
            $("#hide2").hide("slow");
            $("#hide3").hide("slow");
            $("#hide4").hide("slow");
            $("#hide5").hide("slow");
        } else if ($("#medtype").val() == "Lotion") {
            $("#hide1").hide("slow");
            $("#hide2").hide("slow");
            $("#hide3").hide("slow");
            $("#hide4").hide("slow");
            $("#hide5").hide("slow");
        } else if (
            $("#medtype").val() != "Mouthwash" ||
            $("#medtype").val() != "Toothpaste"
        ) {
            {
                $("#hide1").show("slow");
                $("#hide2").show("slow");
                $("#hide3").show("slow");
                $("#hide4").show("slow");
                $("#hide5").hide("slow");
            }
        }
    });

    $("#medName").click(function() {
        if ($("#medtype").val() == "Mouthwash") {
            $("#hide1").hide("slow");
            $("#hide2").hide("slow");
            $("#hide3").hide("slow");
            $("#hide4").hide("slow");
            $("#hide5").show("slow");
        } else if ($("#medtype").val() == "Toothpaste") {
            $("#hide1").hide("slow");
            $("#hide2").hide("slow");
            $("#hide3").hide("slow");
            $("#hide4").hide("slow");
            $("#hide5").hide("slow");
        } else if ($("#medtype").val() == "Lotion") {
            $("#hide1").hide("slow");
            $("#hide2").hide("slow");
            $("#hide3").hide("slow");
            $("#hide4").hide("slow");
            $("#hide5").hide("slow");
        } else if (
            $("#medtype").val() != "Mouthwash" ||
            $("#medtype").val() != "Toothpaste"
        ) {
            {
                $("#hide1").show("slow");
                $("#hide2").show("slow");
                $("#hide3").show("slow");
                $("#hide4").show("slow");
                $("#hide5").hide("slow");
            }
        }
    });
});
