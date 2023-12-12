in_file = open('in.txt', 'r')
out_file = open('out.txt', 'w')
countFigure = 1
countTable = 1
countAt = 0
countSharp = 1
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
        if '$countFigure' in to_write:
            to_write = to_write.replace('$countFigure', str(countFigure))
            countFigure += 1
        if '$countTable' in to_write:
            to_write = to_write.replace('$countTable', str(countTable))
            countTable += 1
        if '@@' in to_write:
            countAt += 1
            pattern = str(countAt) + '. '
            to_write = to_write.replace('@@', pattern)
            countSharp = 1
        if '##' in to_write:
            pattern = str(countAt) + '.' + str(countSharp) + '. '
            to_write = to_write.replace('##', pattern)
            countSharp += 1
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