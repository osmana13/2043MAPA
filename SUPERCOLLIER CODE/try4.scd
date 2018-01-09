
(
Window.closeAll;
w = Window.new("gui", Rect(850,50,380,80))
.front
.alwaysOnTop_(true);


~slider = Slider(w, Rect(20,20,150,30))
.background_(Color(0.2,0.75,0.95))
.action_({
	arg obj;
	var cf;
	cf = obj.value.linexp(10,100,4000).postln;
	if(
		x.isPlaying,
		{x.set(\freq, cf)}
	);

	~numberBox.value_(obj.value.linexp(0,1,100,4000));

});

~numberBox = NumberBox(w, Rect(180,20,80,30))
.value_(100)
.clipLo_(100)
.clipHi_(4000)
.font_(Font("Monaco", 16))
.decimals_(2)
.action_({
	arg obj;
	~slider.valueAction_(obj.value.explin(100,4000,0,1))

});

// ~freqLabel = StaticText(w, Rect(180,50,80,20)) //
// .string("freq") //
// .font_(Font("Monaco", 14)) //
// .align_(\center) //



~knob = Knob(w, Rect (270,20,30,30))
.action_({
	arg obj;
	var qual;
	qual = obj.value.linexp(0.1,1,100).reciprocal;
	if (
		x.playing,
		{x.set(\rq, qual)}

	);

});


~button = Button(w, Rect(310,20,50,30))
.states_([
	["OFF", Color.black, Color.gray(0.8)],
	["ON", Color.white, Color(0.2,0.75,0.95)]
])

.font_(Font("Monaco", 18))
.action_({
	arg obj;
	if (
		obj.value == 1,
		{
			x = Synth.new
    (\simplebpf,
   [
		\freq, ~slider.value.linexp(0,1,100,4000)
	]
			).register;
		},

		{x.free}

	);
})

)

~button.value_(0);


(
x = Synth.new
    (\simplebpf,
   [
		\freq, ~slider.value.linexp(0,1,100,4000)
	]

);
)
x.free;


