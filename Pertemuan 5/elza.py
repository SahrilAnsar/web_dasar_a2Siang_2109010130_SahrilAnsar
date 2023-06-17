def selections_sort(item):
    """Sort a list of items into ascending order using the selection sort algorithm.
    """
    for step in range(len(items)):
        #find the location of the smallest element in items[step:].
        location_of_smallest = step
        for location in range (step, len(items)):
            if items[location] < items[location_of_smallest]:
                location_of_smallest = location
            
        #Exchange items[step] with items[location_of_smallest]
        items[step], items[location_of_smallest] = items[location_of_smallest], items[step]

items = [1,5,2,3,9,4,5]
selections_sort(items)
print(items)