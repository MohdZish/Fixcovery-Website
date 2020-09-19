import re

a = "#s#step Hey first step here #s##s#note Some note #s#"

method = a.split("#m#")
#steps = method[0].split("|")

stepslist = re.findall('@s@(.+?)@s@', method[0])
length = len(stepslist)

print(stepslist)
for x in range(length):
    if stepslist:
        found = stepslist[x]
        if found[:4] == "step":
            print("This is a step")

        if found[:4] == "note":
            print("This is a note")

        print(found[5:])


#Using cmd @@@ lets see how to do this @@@ step 1 @@@ step 2 @@@ <img --- Using Registry @@@ lets see @@@ step 1

