#Selection sort
require "pry"

def find_smallest(array)
  smallest = array[0]
  smallest_index = 0
  array.each_with_index do |element, index|
    if element < smallest
      smallest = element
      smallest_index = index
    end
  end
  smallest_index
end

def selection_sort(array)
  new_array = []
  while array.length >= 1
    smallest = find_smallest(array)
    new_array.push(array.delete_at(smallest))
  end
  new_array
end

print selection_sort([5, 3, 6, 2, 10])
