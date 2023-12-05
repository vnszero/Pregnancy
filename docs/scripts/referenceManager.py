in_file = open('in.txt', 'r')
out_file = open('out.txt', 'w')
lines = in_file.readlines()
state = 'references'
counter = 1
base = {}
counted_references = {}
already_identified_keys = {}
for line in lines:
    if '@@' in line:
        state = 'body'
    
    if state == 'references':
        key, reference = line.split('=|=')
        base[key] = reference
    elif state == 'body':
        to_write = line
        for key in base.keys():
            if key in to_write:
                if key in already_identified_keys.keys():
                    to_write = to_write.replace(key[1:7], str(already_identified_keys[key]))
                else:    
                    to_write = to_write.replace(key[1:7], str(counter))
                    counted_reference = base[key]
                    counted_references[counter] = counted_reference
                    already_identified_keys[key] = counter
                    counter += 1
        out_file.write(to_write)

for index in counted_references.keys():
    out_file.write('[' + str(index) + '] ' + counted_references[index])

in_file.close()
out_file.close()