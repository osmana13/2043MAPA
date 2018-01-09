s.boot;
(
SynthDef.new(\simplebpf, {
	arg freq=440;
	var sig;
	sig = PinkNoise.ar(1!2);
	sig = BPF.ar(sig, freq.lag(0.5), 0.2);
	Out.ar(0, sig);
}).add;
)


(
Window.closeAll;
w = Window.new("gui", Rect(750,50,500,200))
.front
.alwaysOnTop_(true);


~slider = Slider(w, Rect(20,20,150,30))
.background_(Color(0.2,0.75,0.95))
.action_({
	arg obj;
	var cf;
	cf = obj.value.linexp(10,100,4000).postln;
	x.set(\freq, cf);
});


~button = Button(w, Rect(430,20,50,30))
.states_([
	["OFF", Color.black, Color.gray(0.8)],
	["ON", Color.white, Color(0.2,0.75,0.95)]
])

.font_(Font("Monaco", 18));
.action

)

~button.value_(0);


(
x = Synth.new
    (\simplebpf,
   [
		\freq, ~slider.value.linexp(10,100,4000)
	]

);
)
x.free;
