#Binary Search is an algorithm that can reduce the number of steps for a program to select an element from a sorted list.
require 'benchmark'
require 'pry'

def binary_search(sorted_array, number_of_interest)
  low = 0
  high = sorted_array.length - 1
  count = 0

  while low <= high
    mid = (low + high) / 2
    guess = sorted_array[mid]

    if guess === number_of_interest
      return count
    elsif guess > number_of_interest
      high = mid - 1
    else
      low = mid + 1
    end
    count += 1
  end
end

def dummy_search(sorted_array, number_of_interest)
  count = 0
  sorted_array.each do |guess|
    if guess === number_of_interest
      return count
    end
    count += 1
  end
end

sorted_array = Array.new(1000) { |n| n + 1 }
number_of_interest = rand(1000) + 1

n = 5000
binary_benchmark = []
binary_count = []
dummy_benchmark = []
dummy_count = []

puts "Binary search benchmark is #{Benchmark.measure { binary_search(sorted_array, number_of_interest) }} with #{binary_search(sorted_array, number_of_interest)} steps."
puts "Dummy search benchmark is #{Benchmark.measure { dummy_search(sorted_array, number_of_interest) }} with #{dummy_search(sorted_array, number_of_interest)} steps."
