
class Bin:
  def __init__(self, size):
    self.contents = []
    self.size = size

  def put(self, item):
    if sum(self.contents) + item <= size:
      self.contents.append(item)
      return True
    else:
      return False
  
  def remove(self, item):
    self.contents.remove(item)

def getFilledBinsCount():
  count = 0
  for bin in bins:
    if len(bin.contents) != 0:
      count += 1
  return count

size = 9
items = [3, 5, 2, 5, 3, 2, 4, 3]
bins = [Bin(size) for i in range(len(items))]
currentBestSolution = len(items)
currentBestBins = []