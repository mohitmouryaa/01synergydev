	/*  Wizard */
	jQuery(function ($) {
		"use strict";
		$('form#wrapped').attr('action', 'survey.php');
		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
		// Validate select
		$('#wrapped').validate({
			ignore: [],
			rules: {
				select: {
					required: true
				}
			},
			errorPlacement: function (error, element) {
				if (element.is('select:hidden')) {
					error.insertAfter(element.next('.nice-select'));
				} else {
					error.insertAfter(element);
				}
			}
		});
	});

// Summary 
function getVals(formControl, controlType) {
	switch (controlType) {

		case 'question_1':
			var value = $(formControl).val();
			$("#question_1").text(value);
			setTimeout(function(){
				$("#nextButton").click();
			}, 1000);
			setTimeout(function(){
				$('#nextButton').removeAttr('hidden');
			},1100);
			break;


			case 'question_2':
			var checkboxName = $(formControl).attr('name');
			var value = [];
			$("input[name*='" + checkboxName + "']").each(function () {
				if (jQuery(this).is(":checked")) {
					value.push($(this).val());
				}
			});
			var joinedText = $("#question_2").text(value.join(", "));
			break;		


			case 'question_3':
			var value = $(formControl).val();
			$("#question_3").text(value);
			setTimeout(function(){
				$("#nextButton").click();
			}, 1000);
			break;


			case 'question_4':
			var value = $(formControl).val();
			$("#question_4").text(value);
			setTimeout(function(){
				$("#nextButton").click();
			}, 1000);
			break;


			case 'question_5':
			var checkboxName = $(formControl).attr('name');
			var value = [];
			$("input[name*='" + checkboxName + "']").each(function () {
				if (jQuery(this).is(":checked")) {
					value.push($(this).val());
				}
			});

			var joinedText = $("#question_5").text(value.join(", "));
			console.log(joinedText);
			break;	
		}

		

	}


	function hideMeNow() {
		$('#hideMeNow').val(1);
	}